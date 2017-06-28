docker run --rm -e "PAYLOAD_FILE=greet.payload.json" -v "$PWD":/worker -w /worker iron/php php greet.php
