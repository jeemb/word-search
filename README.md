# _Application Specifications_

|Behavior|Input|Output|
|--------|-----|------|
|App searches if user-inputted word exists in user-inputted string|word: "is" phrase:"is"|1|
|App will search if user-inputted word exists in multiple word string | word: “is” phrase: “substr_count is a pretty cool function” | 1 |
|App will only match full words (no partial matches)|word: “is” phrase: “this is a pretty great function” |1|
|App will search string for word regardless of capitalization |word: “IS” phrase: “this is a pretty cool function”|1|
