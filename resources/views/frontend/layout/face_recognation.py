import cv2
img = cv2.imread("C:/Users/TCC/Downloads/post/img.png")
face_cascade = cv2.CascadeClassifier("haarcascade_frontalface_default.xml")
gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
faces = face_cascade.detectMultiScale(gray)
for (x,y,w,h) in faces:
cv2.rectangle(img, (x,y) , (x+w, y+h),(255,255,0), 1)
cv2.imwrite("C:/Users/TCC/Downloads/post/img1.png")