pipeline {
  agent any
  stages {
    stage('Checkout code') {
      steps {
        git(url: 'https://github.com/njugunamwangi/store', branch: 'main')
      }
    }

    stage('Install dependancies') {
      steps {
        sh 'composer install --ignore-platform-reqs'
      }
    }

    stage('Initialize env.') {
      parallel {
        stage('Initialize env.') {
          steps {
            sh 'php init'
          }
        }

        stage('Select Env.') {
          steps {
            sh 'echo 1'
          }
        }

        stage('Confirm selection') {
          steps {
            sh 'echo \'yes\''
          }
        }

      }
    }

    stage('Config db file') {
      parallel {
        stage('Config db file') {
          steps {
            sh 'ls -la'
          }
        }

        stage('Navigate') {
          steps {
            sh 'cd common/config'
          }
        }

        stage('create main-local.php') {
          steps {
            sh '''touch main-local.php && echo "<?php
return [
    \'components\' => [
        \'db\' => [
            \'class\' => \'yii\\db\\Connection\',
            \'dsn\' => \'mysql:host=localhost;dbname=store\',
            \'username\' => \'root\',
            \'password\' => \'\',
            \'charset\' => \'utf8\',
        ],
        \'mailer\' => [
            \'class\' => \'yii\\swiftmailer\\Mailer\',
            \'viewPath\' => \'@common/mail\',
        ],
    ],
];
" > main-local.php'''
          }
        }

      }
    }

    stage('Create database') {
      steps {
        sh 'sudo mysql -u root -e "create database store"'
      }
    }

  }
}