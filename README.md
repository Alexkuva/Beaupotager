// mongo
cd ..\..\Program Files\Mongodb\Server\3.0\bin

// Connexion mongodb
mongod --dbpath d:\dev\projets\beaupotager\data\
mongod --dbpath "d:\Alex\Cours\Esaip\IR3\Semestre 1\PSP\Fuzzy\data"
mongod --dbpath "d:\Alex\Cours\Esaip\IR3\Semestre 1\DotNet\GitCommun\votes\data"

// import j.json
mongoimport --db Beaupotager --collection potagers --file data.json
mongoimport --db Beaupotager --collection potagers < data.json

// import j.json avec plusieurs collections
mongoimport --db Beaupotager --collection potagers --file data.json --jsonArray

// export j.json
mongoexport --db Beaupotager --collection potagercollection --out potager.json

// affiche le nom des bases
db.getName()

// créer collection
db.createCollection(name, options)

// affiche le nom des collections
db.getCollectionNames()


// supprime une collection (@collection: nom de la collection)
db.collection.drop()

// supprime toutes les éléments d'une collection (@collection: nom de la collection)
db.collection.remove({})

// affiche le nom des éléments d'une collection
db.usercollection.find().pretty()
db.usercollection.find().pretty().limit(10).skip(5)
db.usercollection.find().limit(10).toArray

//clear console
>cls


//EXAMPLE
> myobject = { "price" : 12.5 }
{ "price" : 12.5 }
> myobject.price
12.5

//FIND
db.collection.find({price:{$gte:200},available:true},{name:1,price:1,available:1})
db.collection.find({for:{$exists:true}},{name:1,for:1})	//si l'attribut for existe
{"x":["plop","yo"]}
db.collection.find({"x":"plop"})
{"x":{"a":1,"b":3}}
db.collection.find({"x.a":1})

//CURSOR
var cursor = db.test.find():
cursor.hasNext() // true or false
cursor.next() // prochaine valeure

while(cursor.hasNext() ){
	printjson(cursor.next());
}
