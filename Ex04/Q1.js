// 1.	Write an arrow function to calculate total and percentage of marks

const calculate = (m1, m2, m3, m4, m5) => {
    let total = m1 + m2 + m3 + m4 + m5;
    let percentage = (total / 500) * 100;

    console.log("Total Marks:", total);
    console.log("Percentage:", percentage + "%");
};

calculate(80, 75, 90, 85, 70);

