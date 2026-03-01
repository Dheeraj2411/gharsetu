# Configration in project

Add: eslint.config.js file in root directory,
 In Package.json add this in script:{
 "fix:eslint":"eslint --ext .js,.vue resources/js/ --fix"
 }
Add: jsconfig.json file in root directory

# Laravel Debugger

- composer require fruitcake/laravel-debugbar --dev

# Laravel IDE helper

- composer require --dev barryvdh/laravel-ide-helper
  -- In composer.json---
  Add:
  "scripts": {
  "post-update-cmd": [
  "Illuminate\\Foundation\\ComposerScripts::postUpdate",
  "@php artisan ide-helper:generate",
  "@php artisan ide-helper:meta"
  ]
  },

//https://github.com/spectacles/CodeComplice


# docker-compose.yml 
  add:config of the docker image for mariadb database 
   - Run -->  docker compose up 
