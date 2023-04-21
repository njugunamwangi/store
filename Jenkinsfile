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
        sh 'composer update'
      }
    }

  }
}