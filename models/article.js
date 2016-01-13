var mongoose = require('mongoose');

// define the schema for our user model
var articleSchema = mongoose.Schema({
        titre : String,
        type : String,
        commentaire : [commentaireSchema]
});

produitSchema.plugin(passportLocalMongoose);

// create the model for users and expose it to our app
module.exports = mongoose.model('article', articleSchema);