    var a = 1;
    var b = 3;

    function plus(){
      console.log(a+b);
    };

    function minus(){
      console.log(b-a);
    }

    module.exports = {
      plus : plus,
      minus : minus
    }
