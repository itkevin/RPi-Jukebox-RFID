import subprocess
import time
import os

sleepTime = 100
shutdownTimer = 10 * 60
processNotFoundTime = 0

while True:
    time.sleep(sleepTime)

    status, output = subprocess.getstatusoutput('ps -ef | grep -v grep | grep vlc')

    if status == 0:
        processNotFoundTime = 0

    if status != 0 and processNotFoundTime == 0:
        processNotFoundTime = int(time.time())

    timeNow = int(time.time())
    if processNotFoundTime != 0 and timeNow - processNotFoundTime > shutdownTimer:
        os.system("./scripts/playout_controls.sh -c=shutdown")