server('mphp7_staging', 'mphp7.staging.foggyline.net')
 ->user('user')
 ->password('pass')
 ->set('deploy_path', '/home/www')
 ->set('branch', 'stage')
 ->stage('staging');

server('mphp7_prod', 'mphp7.foggyline.net')
 ->user('user')
 ->identityFile()
 ->set('deploy_path', '/home/www')
 ->set('branch', 'master')
 ->stage('production');
