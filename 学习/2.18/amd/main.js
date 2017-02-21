    require.config({
      shim: {
        //通过shim的方式来处理非AMD的规范的代码
        'shim-0':{
          //这里使用shim是手动告诉如何找依赖
          deps: ['shim-1']
        }
      }
    });
    require(['starting','shim-0'],function(start,shim){
      console.log('终于加载完成了')
    });
    console.log("starting");
