#!/bin/bash

export PATH=/bin:/usr/bin:/usr/local/bin
TODAY=`date +"%d%b%Y"`
 
################################################################
################## Update below values  ########################
 
MOODLEDATA_BACKUP_PATH='/var/moodlebackups/moodledata'
MOODLEDATA_PATH='/var/moodledata'
BACKUP_RETAIN_DAYS=7   ## Number of days to keep local backup copy
 
#################################################################
 
mkdir -p ${MOODLEDATA_BACKUP_PATH}/${TODAY}
echo "Backup started for moodle data - ${MOODLEDATA_PATH}"

tar -zcvf ${MOODLEDATA_BACKUP_PATH}/${TODAY}/moodledata-${TODAY}.tar.gz ${MOODLEDATA_PATH}
 
if [ $? -eq 0 ]; then
  echo "Moodle data backup successfully completed"
else
  echo "Error found during backup"
  exit 1
fi
 
 
##### Remove backups older than {BACKUP_RETAIN_DAYS} days  #####
 
DATADELDATE=`date +"%d%b%Y" --date="${BACKUP_RETAIN_DAYS} days ago"`
 
if [ ! -z ${MOODLEDATA_BACKUP_PATH} ]; then
      cd ${MOODLEDATA_BACKUP_PATH}
      if [ ! -z ${DATADELDATE} ] && [ -d ${DATADELDATE} ]; then
            rm -rf ${DATADELDATE}
      fi
fi
 
### End of script ####
