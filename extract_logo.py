import re
import base64
import os

with open('app/website/nav-avenir.js', 'r') as f:
    content = f.read()

# Look for data:image/png;base64,...
m = re.search(r'data:image/png;base64,([A-Za-z0-9+/=]+)', content)
if m:
    b64_data = m.group(1)
    os.makedirs('public/images', exist_ok=True)
    with open('public/images/logo.png', 'wb') as f:
        f.write(base64.b64decode(b64_data))
    print("Logo extracted and saved to public/images/logo.png")
else:
    print("Base64 string not found")

