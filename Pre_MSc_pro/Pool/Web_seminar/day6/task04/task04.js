module.exports = {
    fizzBuzz: function(num) {
        var x = ""
        for (let i = 1; i <= num; i++){
            if (i%5 == 0 & i%3 ==0 & i<num){
                x = x+" FizzBuzz,";}

            else if (i%5==0 & i<num){
                    x = x+" Buzz,";}

            else if (i%3==0 & i<num){
                x = x+" Fizz,";}

            else if (i%5 != 0 & i%3 !=0 & i<num){
                x = x+" "+i+",";}

            if(i==num){
                if (i%5 == 0 & i%3 ==0){
                    x = x+" FizzBuzz";}
    
                else if (i%5==0){
                        x = x+" Buzz";}
    
                else if (i%3==0){
                    x = x+" Fizz";}
    
                else {
                    x = x+" "+i;}
            }
        }
        return(x)
                }
            }