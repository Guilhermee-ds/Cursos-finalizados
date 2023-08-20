/**
 * manipulating arrays
 */


let numbers = [1,2,3,4,5,6,7,8];
numbers.push(9);
console.log(numbers); // exit [1,2,3,4,5,6,7,8,9] ADD element for final of array

/**
 * POP
 */


let numbersPOP = [1,2,3]
numbersPOP.pop();
console.log(numbersPOP); // exit [1,2] remove final element for array


/**
 * Splice
 */


let numbersSplice = [1,2,3,4];
numbersSplice.splice(2,1); // remove element in position 1
console.log(numbersSplice); // exit [1,2,4];
