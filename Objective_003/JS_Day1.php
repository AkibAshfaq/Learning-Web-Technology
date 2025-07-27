<html>
    <body>
        <script>
            // Store
            var st = {
                name: "John wick",
                age: 23,
                marks: [85, 90, 78, 92],
            };

            // Function to display summary
            function displaySummary() {
                console.log("student Summary:\n");
                console.log("Name: " + st.name); 
                console.log("Age: " + st.age);
            }

            // Display summary
            displaySummary();

            // check if passed or not
            function isspassed(marks) {
                if(marks[0] >= 50 && marks[1] >= 50 && marks[2] >= 50 && marks[3] >= 50) {
                    return true;
                } else {
                    return false;
                }
            }

            // Use conditions to determine if the st is an adult and whether they passed.
            if (st.age >= 18) {
                console.log("The student is an adult.");
            } else {
                console.log("The student is Minor.");
            }

            if (isspassed(st.marks)) {
                console.log("The student has passed.");
            } else {
                console.log("The student has Failed.");
            }

            // Calculations and marks display
            var totalMarks = 0;
            for (var i = 0; i < st.marks.length; i++) {
                totalMarks += st.marks[i];
                console.log("Mark in subject " + (i + 1) + ": " + st.marks[i]);
            }
            console.log("Addition of marks:", totalMarks);
            console.log("Total Marks:", totalMarks, "out of", st.marks.length * 100);

            // Show results 
            function result(){
                alert("Subject 1: " + st.marks[0] + "\n" +
                      "Subject 2: " + st.marks[1] + "\n" +
                      "Subject 3: " + st.marks[2] + "\n" +
                      "Subject 4: " + st.marks[3]);
            }

        </script>

        <!-- button to show results -->
        <button onclick="result()">Show Summary</button>

    </body>
</html>
