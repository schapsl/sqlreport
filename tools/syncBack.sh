#!/usr/bin/bash
set -x
function sync() {
    #Sync installed with module builder
    rsync --recursive --update --existing --verbose modules/msg_${1}/ \
        custom/modulebuilder/packages/SQLReport/modules/${1}/ &&
    #Sync module builder with pre-packages
    rsync --recursive --update --existing --verbose custom/modulebuilder/packages/SQLReport/modules/${1}/ \
        custom/modulebuilder/builds/SQLReport/SugarModules/modules/msg_${1}/ &&
    return 0
}

DIRECTORY=`dirname ${0}` &&
PWD=$(pwd) &&
cd "${DIRECTORY}/../../../../.." &&
sync SQLReport &&
sync SQLReportParameter &&
cd "${PWD}" &&
exit 0
