import ollama

response = ollama.chat(model="deepseek-r1:7b", messages=[{"role": "user", "content": "meaning of my name minal?"}])
print(response["message"]["content"])
