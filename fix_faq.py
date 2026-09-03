import re
import os

filepath = r"c:\Users\DELL\Desktop\go-custom\resources\views\components\faq.blade.php"
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# Pattern: <button class="faq-question" ...> ... </button>
pattern = re.compile(r'(<button class="faq-question".*?</button>)', re.DOTALL)
replacement = r'<h3 style="margin: 0; padding: 0;">\n\1\n</h3>'
content = pattern.sub(replacement, content)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)
print("Done")
