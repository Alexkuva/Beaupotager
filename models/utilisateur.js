var mongoose = require('mongoose');
var passportLocalMongoose = require('passport-local-mongoose');


var potagerSchema = mongoose.Schema({
        villeGlobal : String,
        departement : String,
        description : String,
        titre : String,
        siteWeb : String,
        certifBio : Boolean,
        status : String,
        recolte : Boolean,
        premium : Boolean,
        email : String,
        numero : String,
        valide : String,
        images : [String],
        produits : [Number],
        descriptonProduit : [String],
        surplus  : [Number],
        service : {
          titre:String,
          description: String,
          prix: Number,
          Adomicile : { type : Number, min : 0, max : 2 }
        },
        visite : {
          description : String,
          horaires : String
        },
        adresse : {
          production:{
            num : Number,
            rue : String,
            ville : String,
            pays : String,
            visible : Boolean
          },
          vente:[
            {
              num : Number,
              rue : String,
              ville : String,
              pays : String,
              visible : Boolean
            },
            {
              num : Number,
              rue : String,
              ville : String,
              pays : String,
              visible : Boolean
            }
          ]
        }
});

// define the schema for our user model
var userSchema = mongoose.Schema({
        username : String,
        prenom : String,
        nom : String,
        email : String,
        password : String,
        numero : String,
        dateInscription : String,
        newsletter : String,
        infoPartenaires : String,
        potager : [potagerSchema]
});

userSchema.plugin(passportLocalMongoose);

// create the model for users and expose it to our app
module.exports = mongoose.model('User', userSchema);