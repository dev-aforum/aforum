//********************//
//  Gruntfile
//********************//

//esse arquivo controla o sistema de automação do site.

//chamamos o grunt
module.exports = function(grunt){

  //****************************************************************************
  //    Carregamento de tarefas
  //****************************************************************************


  //LOAD TASKS
  // carrega as tarefas dos modulos do npm

  // watch
  grunt.loadNpmTasks("grunt-contrib-watch"); //watch

  // gestão de arquivos em geral
  grunt.loadNpmTasks("grunt-contrib-copy"); //copy
  grunt.loadNpmTasks("grunt-contrib-clean"); //clean


  // img
  grunt.loadNpmTasks("grunt-contrib-imagemin");

  //php
  grunt.loadNpmTasks("grunt-phplint"); //phplint

  //compile, concat, build
  grunt.loadNpmTasks("grunt-contrib-concat"); //concat

  //js
  grunt.loadNpmTasks("grunt-contrib-jshint"); //jshint
  grunt.loadNpmTasks("grunt-contrib-uglify"); //uglify

  //css
  grunt.loadNpmTasks("grunt-contrib-sass"); //sass
  grunt.loadNpmTasks("grunt-autoprefixer"); //autoprefixer
  grunt.loadNpmTasks("grunt-contrib-cssmin"); //css min



  //****************************************************************************

  //****************************************************************************
  //    Configurações
  //****************************************************************************
  grunt.initConfig({

    // GRUNT WATCH
    // verifica as modificações nos arquivos e realiza tarefas
    watch: {
      //javascript
      js:{
        files:["dev/js/**/*.js"],
        tasks:["devJs"]
      },
      //scss
      css:{
        files:["dev/scss/**/*.scss"],
        tasks:["devScss"]
      },

      //php
      php:{
        files:["dev/**/*.php"],
        tasks:["devPhp"]
      },

      //gruntfile
      gruntfile:{
        files:["Gruntfile.js"],
        tasks:["jshint:grunt"]
      },

      img:{
        files:["dev/img/**/*.{jpg,png,gif,mp4}"],
        tasks:[
              "clean:testImg",
              "clean:prodImg",
              "copy:imgToTest",
            ]
      }


    },//final da task watch

    // GESTÃO DE arquivos
    //clean
    //limpa os diretórios para receber novas versões dos arquivoss
    clean:{
      // php
      //test
      //exclui todos os arquivos .php de /test
      test:["test/**/*.php"],
      //prod
      //exclui todos os arquivos .php de /prod
      prod:["prod/**/*.php"],

      // img
      // exclui imagens de test/img
      testImg:["test/img/**/*.{jpg,png,gif}"],

      // exclui imagens de prod/img
      prodImg:["prod/img/**/*.{jpg,png,gif}"]

    },//final da test clean

    //copy
    //copia novas versões dos aquivos para diretórios
    copy:{
      //php
      //devToTest
      //copia todos os arquvios .php de /dev para /test
      devToTest:{
        expand:true,
        cwd:"dev",
        src:["**/*.php"],
        dest:"test/",
      },

      //testToProd
      //copia todos os arquvios .php de /test para /prod
      testToProd:{
        expand:true,
        cwd:"test",
        src:["**/*.php"],
        dest:"prod/",
      },

      // img
      // copia imagens da pasta dev para test e prod
      imgToTest:{
        expand: true,
        cwd: "dev/img",
        src: [ "**/*.{jpg,png,gif}" ],
        dest: "test/img",
      },

      // img
      // copia imagens da pasta dev para test e prod
      imgToProd:{
        expand: true,
        cwd: "dev/img",
        src: [ "**/*.{jpg,png,gif}" ],
        dest: "prod/img",
      },




    }, //final da task copy

    //PHP
    // os arquvos php, quando modificados são verificados pelo phplint,
    //se aprovados são copiados para /test onde são testados manualmente
    //se aprovados são copiados pela chamada no terminal da tarefa build para
    //o diretório /prod de onde são colocados em produção


    //phplint
    //verifica erros e más praticas nos arquivos php
    phplint:{
      files: "dev/**/*.php" //todos os arquivos .php em /dev
    },//final da task php lint

    //CONCAT
    //juntos vários arquivos em um só
    concat:{

      //js
      //concatena todos os arquivos .js em dev/js para dev/ no arquivo main.js
      js:{
        src: "dev/js/**/*.js", //todos os arquivos js em dev/js
        dest: "test/main.js" //para dev/main.js
      },//final da task concat:js

      //scss
      //concatena todos os arquivos .scss em dev/scss para dev/ no arquivo styles.js
      scss:{
        src: "dev/scss/**/*.scss", //todos os arquivos scss em dev/scss
        dest: "dev/styles.scss" //para dev/styles.scss
      }//final da task concat:scss

    },//final da task concat


    // JS
    // os arquivos javascript são monitorados pelo watch quando salvos, se
    // passam pela verificação são concatenados de dev/js para test/main.js.
    // Depois  da concatenação, se aprovado, o arquivo é minificado para
    // /prod com o comando build no terminal. Esse arquivo também é monitorado

    // jshint
    // verifica os arquivos de javascript procurando erros e más praticas
    jshint:{
      grunt:["Gruntfile.js"], // Gruntfile
      all:["dev/js/**/*.js"] // Arquivos javascript
    },// final da tarefa jshint

    // uglify
    // minifica os arquivos javascript
    uglify:{
      // main
      // minifica o arquivo test/main.js para prod/main
      main:{
        files:{
          "prod/main.js":["test/main.js"] // minifica o arquivo test/main.js para prod/main
        }// final do objeto files
      }// final do objeto main
    },// final da tarefa uglify

    // SCSS
    // os arquivos scss são concatenados da pasta dev/scss para
    // dev/styles.scss, que será compilado para test/styles.css se não houverem
    // erros . Esse arquivo será prefixado com prefixos especificos de browsers
    // pelo autoprefixer. Após aprovação o test/styles.css será minificado para
    // prod/styles.css .

    //sass
    // compila os arquivos scss para css
    sass: {
      compile:{
        files:{
          "test/style.css":"dev/styles.scss" //
        } // final do objeto files
      } // final da task sass:compile
    }, // final da task sass

    // autoprefixer
    // adciona os prefixos nativos dos browsers
    autoprefixer:{
      index:{
        "test/styles.css":"test/styles.css" // adciona os prefixos nativos a
      }, //final da task autoprefixer:styles
    }, //final da task autoprefixer

    //cssmin
    //minifica os aqruivo test/styles.css para prod/styles.css
    cssmin: {
      styles: {
        files: {
        "prod/styles.css": ["test/styles.css"]
        } // final do objeto files
      } // final da tarefa cssmin:styles
    } //final da tarefa cssmin

  });//final do método de configuração

  //****************************************************************************

  //****************************************************************************
  //    Registro de tarefas
  //****************************************************************************

  // o registro de tarefas cria as tarefas a serem executadas
  //REGISTER TASKS

  // dev
  // tarefas customizadas de dev/

  // php
  // os arquivos php são verificados, /test é limpa e depois os arquivos .php de
  // dev/ são copiados para /test
  grunt.registerTask("devPhp",[
    // "phplint", // verifica os arquivos
    "clean:test", // limpa o diretório test/
    "copy:devToTest" // copia os arquivos para test/
  ]); // final da tarefa devPhp

  // js
  // os arquivos javascript em dev/js são verificados, concatenados para
  // test/main.js

  grunt.registerTask("devJs", [
    "jshint", // verificamos os arquivos
    "concat:js" // se pasarem concatenamos
  ]);

  //scss
  // os arquivos scss são concatenados da pasta dev/scss para
  // dev/styles.scss, que será compilado para test/styles.css se não houverem
  // erros . Esse arquivo será prefixado com prefixos especificos de browsers
  // pelo autoprefixer.
  grunt.registerTask("devScss",[
    "concat:scss", // concatena arquivos scss
    "sass:compile", // compila os arquivo concatenado
    "autoprefixer:index", //adciona prefixos
  ]);

  // prod
  // tarefas customizas de prod

  //php
  // prod/ é limpa e depois os arquivos .php de
  // test/ são copiados para test/
  grunt.registerTask("prodPhp",[
    "clean:prod", // limpa o diretório prod/
    "copy:testToProd" // copia os arquivos para prod/
  ]); // final da tarefa prodPhp

  //js
  // test/main.js é minificado para prod/main.js
  grunt.registerTask("prodJs",[
    "uglify:main" //minifica arquivos js
  ]); // final da tarefa prodJs

  //scss
  //o arquivo test/styles.css é minificado para prod/styles.css
  grunt.registerTask("prodCss",[
    "cssmin:styles"
  ]); //final da tarefa prodCss

  // prod
  // tarefa que reune as tarefas de produção
  grunt.registerTask("prod",[
    "copy:imgToProd",
    "prodPhp",
    "prodJs",
    "prodCss"
  ]);//final da tarefa prod

}; //end of module.exports(grunt)
