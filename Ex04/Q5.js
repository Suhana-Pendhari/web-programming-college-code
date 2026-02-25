// 5.	Write a function using rest operator to calculate average of n numbers.

function calculateAverage(...numbers) {
    let sum = 0;

    for (let num of numbers) {
        sum += num;
    }

    let average = sum / numbers.length;
    console.log("Average:", average);
}

calculateAverage(10, 20, 30, 40, 50);
