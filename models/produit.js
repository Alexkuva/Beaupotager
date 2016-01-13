var mongoose = require('mongoose');
var passportLocalMongoose = require('passport-local-mongoose');

// define the schema for our user model
var produitSchema = mongoose.Schema({
        titre : String,
        rare : Boolean,
        categorie : String,
        image : String,
});


module.exports = mongoose.model('Produit', produitSchema);