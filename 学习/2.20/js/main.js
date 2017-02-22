
    require.config({
      baseUrl: "com",
      paths:{
          "minus":"minus"
      }
      // shim: {
      //
      // }
    });

    require(['minus'],function(minus){
      console.log(minus.calculater(222))
    });
