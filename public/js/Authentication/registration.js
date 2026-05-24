function registerForm() {

    return `

    <section>

        <div class="container addUser-container">

            <div class="column1">
                <div class="h1">
                    <h1>Registration</h1>
                </div>
            </div>

            <form id="Registration">

                <div class="column2">

                    <div class="input">
                        <label>First Name <span style="color:red;">*</span></label>
                        <input type="text" id="Name">
                    </div>

                    <div class="input">
                        <label>Your Email <span style="color:red;">*</span></label>
                        <input type="email" id="Email">
                    </div>

                    <div class="input">
                        <label>Enter Password <span style="color:red;">*</span></label>
                        <input type="password" id="Password">
                    </div>

                    <div class="input">
                        <label>Confirm Password <span style="color:red;">*</span></label>
                        <input type="password" id="Confirm">
                    </div>

                    <div class="button">
                        <button type="submit">Submit</button>
                    </div>

                </div>

            </form>

        </div>

    </section>

    `;
}

document.addEventListener("submit", async function (e) {

    if (e.target && e.target.id === "Registration") {

        e.preventDefault();

        let Name = document.querySelector("#Name").value;
        let Email = document.querySelector("#Email").value;
        let Password = document.querySelector("#Password").value;
        let Confirm = document.querySelector("#Confirm").value;

        let errorBox = document.querySelector(".error");
        let successBox = document.querySelector(".success");

        function showError(msg) {
            document.getElementById("error-edit").innerText = msg;
            errorBox.classList.add("error-js");

            setTimeout(() => {
                errorBox.classList.remove("error-js");
            }, 2000);
        }

        // reset
        document.getElementById("error-edit").innerHTML = "";
        document.getElementById("register-success").innerHTML = "";

        // validation
        if (!Name || !Email || !Password || !Confirm) {
            return showError("Ensure all fields are correctly filled");
        }

        if (!Email.includes("@")) {
            return showError("Enter correct email address");
        }

        if (Password !== Confirm) {
            return showError("Confirm password not match");
        }

        try {

            const res = await api.post('/api/registration', {
                Name,
                Email,
                Password
            });

            successBox.classList.add("success-js");
            document.getElementById("register-success").innerText = res.data.data;

            localStorage.setItem("code", res.data.code);

            setTimeout(() => {
                successBox.classList.remove("success-js");

                // ❌ OLD: window.location.replace
                // ✔ FIX:
                navigate("/code");

            }, 1500);

        } catch (err) {
            showError(err.response?.data?.errors?.Email || "Something went wrong");

            console.log(err.response)
        }
    }
});