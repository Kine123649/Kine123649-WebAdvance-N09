# Kine123649-WebAdvance-N09
# php artisan serve --port=9763
# Thông tin về project:
    - Là một trang Web cho phép mọi người tạo tài khoản và đăng các bài post với nội dung mong muốn.
    - Hiện tại đang có 2 models là User và Post cùng với các chức năng cơ bản (CRUD).
    - Web-app được xây dựng cơ bản nhưng vẫn đảm bảo tính linh hoạt và khả năng mở rộng trong tương lai.

## Activity Diagram (Ví dụ cho chức năng create)
```mermaid
flowchart TD
  A[User] -->|Open 'Your Posts' Page| B[Click on 'Create Post'];
    B --> C[Enter Post details]
    C --> D[Click Submit];
    D --> E{Validation};
    E -- Success --> F[Save Post to Database];
    E -- Failure --> G[Show Error Message];
    F --> H[Display Success Message];
    H --> I[Redirect to 'All Post' Page];
```
## Activity Diagram (Ví dụ cho chức năng delete)
```mermaid
flowchart TD
  A[User] -->|Open 'Your Posts' Page| B[Click 'Delete' Button on Specific Post]
  B --> C[Show Confirmation Alert]
  C -->|Confirm Deletion| D[Delete Post]
  D --> E[Redirect to 'All Posts' Page]
  C -->|Cancel| F[Do Nothing]
```
## Class Diagram
```mermaid
classDiagram
    class User {
        +username: string
        +email: string
        +password: string
        +user_id: int
        -create(In email: string, password: string, username: string)
        -read()
        -update(In email: string, password: string, username: string)
        -delete()
    }

    class Post {
        +post_id: int
        +user_id: int
        +title: string
        +body: string
        -create(In title: string, body: string)
        -read(In post_id: int)
        -update(In title: string, body: string)
        -delete(In post_id: int)
    }
     User "1" --> "*" Post : creates
```