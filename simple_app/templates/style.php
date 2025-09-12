<style>
  :root {
    color-scheme: dark;
  }

  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #181a1b;
    color: #f3f3f3;
    box-sizing: border-box;
  }

  body {
    min-height: 100vh;
    padding: 2rem 0.5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  h1 {
    text-align: center;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  img {
    margin: 0 auto;
    width: 30%;
    height: auto;
    border-radius: 16px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.18);
    object-fit: cover;
    background: #222;
    transition: box-shadow 0.2s;
  }

  button[type="submit"] {
    background: linear-gradient(90deg, blue 0%, lightblue 100%);
    color: #cdd3d8ff;
    font-weight: bold;
    border: none;
    border-radius: 12px;
    padding: 0.7rem 1.5rem;
    font-size: 1.1rem;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12);
    transition: background 0.2s, transform 0.1s;
  }

  button[type="submit"]:hover {
    background: linear-gradient(90deg, lightblue 0%, blue 100%);
    transform: translateY(-2px) scale(1.03);
  }
</style>