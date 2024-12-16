<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Dashboard - Exam</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding: 1rem;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 0.5rem 0;
            padding: 0.5rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .content {
            margin-left: 270px;
            padding: 2rem;
        }

        .exam-form {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .exam-form h2 {
            margin-bottom: 1.5rem;
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #555;
        }

        .form-group textarea,
        .form-group input[type="text"],
        .form-group button {
            width: 100%;
            padding: 0.8rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .form-group textarea {
            resize: none;
            height: 100px;
        }

        .form-group button {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #3e8e41;
        }

        .response {
            margin-top: 1.5rem;
            text-align: center;
            color: #4CAF50;
            font-weight: bold;
        }

        .certificate {
            margin-top: 2rem;
            text-align: center;
        }

        .certificate canvas {
            border: 1px solid #ccc;
            margin-top: 1rem;
        }

        footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="header">
        E-Learning Dashboard
    </div>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="#">Dashboard</a>
        <a href="#">Courses</a>
        <a href="#">Assignments</a>
        <a href="#">Exams</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>
    <div class="content">
        <h1>Exam: Video Content Questions</h1>
        <div class="video-section">
            <h2>Watch Videos:</h2>
            <h1> The Courses</h1>
            <a href="https://youtu.be/hlwlM4a5rxg?si=BdCS3Fhw0HHOED4f" target="_blank">Video 1: Introduction to Course</a><br> <br>
            <a href="https://youtu.be/hlwlM4a5rxg?si=BdCS3Fhw0HHOED4f" target="_blank">Video 2: Chapter 2</a><br> <br>
            <a href="https://youtu.be/hlwlM4a5rxg?si=BdCS3Fhw0HHOED4f" target="_blank">Video 3: Chapter Three</a> <br> <br>
        </div>

        <div class="exam-form">
            <h2>Answer the Questions</h2>
            <form id="examForm">
                <div class="form-group">
                    <label for="studentName">Your Name</label>
                    <input type="text" id="studentName" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="question1">1. What was the main topic of Video 1?</label>
                    <textarea id="question1" placeholder="Write your answer here..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="question2">2. Summarize the content of Video 2 in 3 sentences.</label>
                    <textarea id="question2" placeholder="Write your answer here..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="question3">3. What key points were covered in Video 3?</label>
                    <textarea id="question3" placeholder="Write your answer here..." required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Submit Answers</button>
                </div>
            </form>
            <div id="responseMessage" class="response"></div>
            <div id="certificateSection" class="certificate" style="display: none;">
                <h2>Congratulations! Your Certificate is Ready</h2>
                <canvas id="certificateCanvas" width="800" height="600"></canvas>
                <br>
                <button id="downloadCertificate">Download Certificate</button>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2024 E-Learning Platform. All rights reserved.
    </footer>
    <script>
        const form = document.getElementById('examForm');
        const responseMessage = document.getElementById('responseMessage');
        const certificateSection = document.getElementById('certificateSection');
        const certificateCanvas = document.getElementById('certificateCanvas');
        const downloadCertificate = document.getElementById('downloadCertificate');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const studentName = document.getElementById('studentName').value;

            responseMessage.textContent = `Thank you, ${studentName}! Your answers have been submitted.`;

            // Show certificate section
            certificateSection.style.display = 'block';

            // Draw the certificate
            const ctx = certificateCanvas.getContext('2d');
            ctx.fillStyle = '#fff';
            ctx.fillRect(0, 0, certificateCanvas.width, certificateCanvas.height);

            ctx.strokeStyle = '#4CAF50';
            ctx.lineWidth = 10;
            ctx.strokeRect(20, 20, certificateCanvas.width - 40, certificateCanvas.height - 40);

            ctx.fillStyle = '#4CAF50';
            ctx.font = '30px Arial';
            ctx.textAlign = 'center';
            ctx.fillText('Certificate of Completion', certificateCanvas.width / 2, 150);

            ctx.fillStyle = '#000';
            ctx.font = '20px Arial';
            ctx.fillText(`This certifies that`, certificateCanvas.width / 2, 220);
            ctx.font = '25px Arial';
            ctx.fillText(`${studentName}`, certificateCanvas.width / 2, 260);
            ctx.font = '20px Arial';
            ctx.fillText(`has successfully completed the E-Learning Exam`, certificateCanvas.width / 2, 300);
            ctx.fillText(`Date: ${new Date().toLocaleDateString()}`, certificateCanvas.width / 2, 350);
        });

        downloadCertificate.addEventListener('click', function() {
            const link = document.createElement('a');
            link.download = 'certificate.png';
            link.href = certificateCanvas.toDataURL('image/png');
            link.click();
        });
    </script>
</body>
</html>
