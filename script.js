document.getElementById("image-generator-form").addEventListener("submit", async (event) => {
      event.preventDefault();
  
      const prompt = document.getElementById("prompt").value;
      const response = await fetch("generate_image.php", {
          method: "POST",
          headers: {
              "Content-Type": "application/json",
          },
          body: JSON.stringify({ prompt }),
      });
  
      if (response.ok) {
          const data = await response.json();
          const imageUrl = data.data[0].url;
          document.getElementById("generated-image").src = imageUrl;
          document.getElementById("generated-image").style.display = "block";
      } else {
          alert("Error generating image. Please try again.");
      }
  });
  