'use strict';

var path = require('path');

module.exports = {
 entry: path.join(__dirname+'/reactjs.js'), //cual es la entrada de nuestra aplicacion
 output: {
   path: path.join(__dirname + '/public/js'), //donde colocará los archivos al terminar
   filename: 'react.js', //el nombre de nuestro bundle
   publicPath : 'js'
 },
 devServer: { // opciones para el servidor de desarrollo
   inline: true, // para que se recargue automáticamente cuando cambie un archivo
   port: 3333 // puerto donde funcionará el servidor
 },
 module: {
   loaders: [
   {
       test: /\.(js|jsx)$/, //probamos por la extensión .js
       exclude: /node_modules/, //no queremos procesar los archivos en node_modules
       loader: 'babel-loader', //utilizamos babel
       query: { //cargamos los presets que instalamos
         presets: ['es2015', 'react']
       }
     }
     ]
   },
   resolve: {
    extensions: ['.js', '.jsx'],
    alias: {
      src: path.resolve(__dirname, 'src')
    }
  },
};