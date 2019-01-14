<script>

console.log("some function demo in javascript");


var arr = ["pokhara","palpa","nepal","gorkha"];
console.log('Return All value');

     arr.some(function(value,index,_arr){
         console.log(index+": "+value);
         return false;
     });


console.log("return limited value only");


arr.some(function(value,index,_arr){
    console.log(index+": "+value);
    return value=="palpa";

});


     console.log("only first element return ");
     arr.some(function(value,index,_arr){
        console.log(index+": "+value);
        return true;
     });
</script>