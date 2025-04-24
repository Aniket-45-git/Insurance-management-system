<script>
document.getElementById("policyForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    let formData = new FormData(this);

    fetch("submit_policy.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert(data.message); 

            
            sendEmailNotification(formData.get("email"), formData.get("fullname"));
            
            
            setTimeout(() => {
                window.location.href = "thank_you.php";
            }, 2000);
        } else {
            alert("Error: " + data.message);
        }
    })
    .catch(error => console.error("Error:", error));
});

function sendEmailNotification(email, name) {
    let emailData = {
        to: email,
        subject: "Policy Registration Successful",
        message: `Dear ${name},\n\nYour insurance policy has been successfully registered.\n\nThank you!`
    };

    fetch("send_email.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(emailData)
    });
}
</script>
