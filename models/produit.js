var mongoose = require('mongoose');
var passportLocalMongoose = require('passport-local-mongoose');

// define the schema for our user model
var produitSchema = mongoose.Schema({
        titre : String,
        rare : Boolean,
        type : String,
        image : String,
        potager : [Number]
});

produitSchema.plugin(passportLocalMongoose);

// create the model for users and expose it to our app
module.exports = mongoose.model('Produit', produitSchema);