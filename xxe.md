# XXE: External entity injection cho phép att can thiệp vào quá trình xử lý dữ liệu XML của ứng dụng và tương tác với bất kỳ hệ thống phụ trợ bên ngoài nào mà ứng dụng có thể truy cập

- XML extensiable markup language ngôn ngữ đánh dấu mở rộng, để người dùng và máy đều đọc được

- Định nghĩa kiểu dữ liệu XML(DTD) chứa các khai báo có thể xác định cấu trúc của 1 XML. Được khai báo trong phần tử DOCTYPE trùy chọn ở đầu tài liệu XML
- XXE DTD: <!DOCTYPE foo [ <!ENTITY myentity "my entity value">]>
Ví dụ: <!DOCTYPE XXE [<!ENTITY subscribe SYSTEM "secret.txt">]>
+ tên DTD
+ sử dụng định nghĩa thực thể(entities)  trong XML, định nghĩa  1 chuỗi giá trị, sử dụng lại chuỗi giá trị này trong tài liệu bằng tham chiếu đến thực thể đó
+ ext tên thực thể được định nghĩa trong DTD
+ SYSTEM sẽ được tìm kiếm ở 1 tệp nằm ngoài XML hiện tại và được truy cập thông qua URL 
+ Mọi cách sử dụng tham chiếu thực thể &myentity, sẽ được thay thế bằng "my entity value"


Có 4 loại attack XXE
# Retrieve files: Nơi mà thực thể bên ngoài được xác định có chứ nội dung của file  và trả về phản hồi của ứng dụng
- Edit DOCTYPE element definies an external contain(chứa) the path to the file
- Edit giá trị dữ liệu trong XML được trả về trong phản hồi của ứng dựng, để sử dụng thực thể bên ngoài đã được xác định

RSS(Really Simple Syndication) được viết tắt là XML: Phân phối thực sự đơn giản 
- Cho phép bạn cung cấp nội dung trang web
- Xác định một cách dễ dàng để chia sẻ và xem các tiêu đề và nội dung 

% parameter entities: Khai báo và tham chiếu in the doctype 

Thực hiện: 
# Attack to SSRF: 1 thực thể bên ngoài được xác định dựa trên URL tới hệ thống backend

# Blind XXE exfiltrate data out-of-band
# Blind XXE retrieve data via error messages: 

