FROM iron/php

WORKDIR /app
ADD . /app

ENTRYPOINT ["php", "greet.php"]
