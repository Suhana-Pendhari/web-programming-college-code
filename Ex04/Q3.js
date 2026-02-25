// 3.	Create a Student class with properties name, rollNo, and marks.
// Add a method to display student details and result.

class Student {
    constructor(name, rollNo, marks) {
        this.name = name;
        this.rollNo = rollNo;
        this.marks = marks;
    }

    displayDetails() {
        console.log("Name:", this.name);
        console.log("Roll No:", this.rollNo);
        console.log("Marks:", this.marks);
    }

    displayResult() {
        if (this.marks >= 40) {
            console.log("Result: Pass");
        } else {
            console.log("Result: Fail");
        }
    }
}

let s1 = new Student("Suhana", 3102, 90);
s1.displayDetails();
s1.displayResult();
