
let book = {
    title: "Java Programming",
    author: "Y. Kanetkar",
    price: "244.70",
    display(){
        console.log(this.title);
        console.log(this.author);
        console.log(this.price);
    }
}

book.display();


function fact(n){
    if(n==0 || n==1){
        return 1;
    }
    return n* fact(n-1);
}
let n = 5;
let ans = 1;
for(let i=n; i>0; i--){
    ans *= i;
}

console.log(ans);


// console.log(fact(6));
