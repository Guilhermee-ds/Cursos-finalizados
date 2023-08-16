/*
learning mathematical operators
 */


function myFunction (a = 10, b =20, c =92,d =83, e =2,f = 23){
    const sum = a + b;
    const sub = sum - c;
    const mult = sub * d / c;
    const result = mult ** f;
    return result;
}

console.log(myFunction(6,5,4,3,2,1));