document.addEventListener("DOMContentLoaded", () => {
   
    const flexItems = document.querySelectorAll(".flex-item");

    
    flexItems.forEach((item) => {
        
        item.addEventListener("mouseenter", () => {
            item.style.backgroundColor = "#28a745"; 
            item.style.textContent='white';
            item.style.transition = "background-color 0.3s ease, transform 0.3s ease"; 
            item.style.transform = "scale(1.03)"; 
        });

        
        item.addEventListener("mouseleave", () => {
            item.style.backgroundColor = "#f9f9f9"; 
            item.style.transform = "scale(1)"; 
        });

       
        item.addEventListener("click", () => {
            const title = item.querySelector("h3").textContent;
            alert(`You selected: ${title}`);
        });
    });
});
