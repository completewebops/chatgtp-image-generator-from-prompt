<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Generator</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            margin-bottom: 1rem;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label, input {
            margin-bottom: 1rem;
        }

        #generated-image {
            max-width: 80%;
            max-height: 80%;
        }
    </style>
</head>
<body>
    <h1>Image Generator</h1>
    <form id="image-generator-form">
        <label for="prompt">Enter your prompt:</label>
        <input type="text" id="prompt" name="prompt" required>
        <button type="submit">Generate Image</button>
    </form>
    <img id="generated-image" src="" alt="Generated image" style="display: none;">
    <script src="script.js"></script>
</body>
</html>

