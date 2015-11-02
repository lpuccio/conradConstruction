
// Place third party dependencies in the lib folder
//
// Configure loading modules from the lib directory,
requirejs.config({
    "baseUrl": "js",
    "paths": {
      "app": "app"
    },
    "shim": {
        "backbone": ["jquery", "underscore"],
        "plugins": ["jquery"],
        "ekko-lightbox.min":["jquery"]
    }
});

// Load the main app module to start the app
requirejs(["app/main"]);