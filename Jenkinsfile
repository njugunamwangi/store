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
      steps {
        sh 'php init && 1 && yes'
      }
    }

  }
}