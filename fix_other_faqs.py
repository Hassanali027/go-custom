import re
import os

files_to_fix = [
    r"c:\Users\DELL\Desktop\go-custom\resources\views\components\product-faq.blade.php",
    r"c:\Users\DELL\Desktop\go-custom\resources\views\components\faq_mobile.blade.php",
    r"c:\Users\DELL\Desktop\go-custom\resources\views\components\testimonials_faq.blade.php"
]

for filepath in files_to_fix:
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # product-faq: <button class="product-faq-question" ...> ... </button>
    content = re.sub(
        r'(<button class="product-faq-question".*?</button>)', 
        r'<h3 style="margin: 0; padding: 0;">\n\1\n</h3>', 
        content, 
        flags=re.DOTALL
    )

    # faq_mobile & testimonials_faq: <button class="tf-accordion-btn" ...> ... </button>
    content = re.sub(
        r'(<button class="tf-accordion-btn".*?</button>)', 
        r'<h3 style="margin: 0; padding: 0;">\n\1\n</h3>', 
        content, 
        flags=re.DOTALL
    )

    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)

print("Done")
