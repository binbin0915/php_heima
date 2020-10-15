# 小P学堂接口

## 序言

### 这是一个示例文档

你可以点击左侧菜单以查看接口示例和数据字典示例

## 全局错误码

| 错误码 | 错误解释     |
| ------ | ------------ |
| 1000   | 接口认证失败 |
| 1001   | 授权过期     |
| 1002   | 缺失参数     |

## 接口地址
- 测试地址：http://www.aaa.com/api/v1
- 生产地址：http://www.abc.com/api/v1

## 功能接口

### 课程相关

#### 课程列表

**简要描述：**

- 课程列表信息，最多可以取20条记录

**请求URI：**

- `/courses`

**请求方式：**

- GET

**参数：**

| 参数名 | 必选 | 类型 | 说明                              |
| ------ | ---- | ---- | --------------------------------- |
| offset | 否   | int  | 获取得记录启始位置 默认为0        |
| limit  | 否   | int  | 获取的最记录数 默认为20 最大为100 |

**返回示例**

```json
 {
    "data": [
        {
            "id": 1,
            "name": "PHP基础",
            "pic": "http://www.aaa.com/uploads/course/9dilL9Cv5R2yINJYELj8VpnzXprUcJYgMzFnx6HA.jpeg",
            "price": "0.00",
            "cate": {
                "cid": 1,
                "cname": "PHP核心"
            }
        },
        {
            "id": 2,
            "name": "JS高级",
            "pic": "http://www.aaa.com/uploads/course/9dilL9Cv5R2yINJYELj8VpnzXprUcJYgMzFnx6HA.jpeg",
            "price": "0.00",
            "cate": {
                "cid": 1,
                "cname": "PHP核心"
            }
        }
    ]
}
```

**返回参数说明**

| 参数名  | 类型 | 说明                                 |
| ------- | ---- | ------------------------------------ |
| groupid | int  | 用户组id，1：超级管理员；2：普通用户 |

---

#### 课时列表

**简要描述：**

- 课时列表信息

**请求URI：**

- `/lessons`

**请求方式：**

- GET

**参数：**

| 参数名 | 必选 | 类型 | 说明                              |
| ------ | ---- | ---- | --------------------------------- |
| offset | 否   | int  | 获取得记录启始位置 默认为0        |
| limit  | 否   | int  | 获取的最记录数 默认为20 最大为100 |
| id     | 是   | int  | 课程ID                            |

**返回示例**

```json
{
    "data": [
        {
            "id": 1,
            "coname": {
                "id": 1,
                "name": "PHP基础",
                "pic": "http://www.aaa.com/uploads/course/9dilL9Cv5R2yINJYELj8VpnzXprUcJYgMzFnx6HA.jpeg",
                "price": "0.00",
                "cate": {
                    "cid": 1,
                    "cname": "PHP核心"
                }
            },
            "name": "了解PHP",
            "url": "https://wx.1314000.cn/video/v1.mp4"
        }
    ]
}
```

**返回参数说明**

| 参数名  | 类型 | 说明                                 |
| ------- | ---- | ------------------------------------ |
| groupid | int  | 用户组id，1：超级管理员；2：普通用户 |

---

#### 根据课时ID返回课时内容

**简要描述：**

- 根据课时ID返回课时的信息

**请求URI：**

- `/lessons/1`

**请求方式：**

- GET

**参数：**

| 参数名 | 必选 | 类型 | 说明   |
| ------ | ---- | ---- | ------ |
| id     | 是   | int  | 课时ID |

**返回示例**

```json
{
    "data": {
        "id": 2,
        "coname": {
            "id": 1,
            "name": "PHP基础",
            "pic": "http://www.aaa.com/uploads/course/9dilL9Cv5R2yINJYELj8VpnzXprUcJYgMzFnx6HA.jpeg",
            "price": "0.00",
            "cate": {
                "cid": 1,
                "cname": "PHP核心"
            }
        },
        "name": "PHP的发展",
        "url": "https://wx.1314000.cn/video/v2.mp4"
    },
    "status": 0
}
```

**返回参数说明**

| 参数名  | 类型 | 说明                                 |
| ------- | ---- | ------------------------------------ |
| groupid | int  | 用户组id，1：超级管理员；2：普通用户 |

---

#### 给课时添加评论

**简要描述：**

- 给课时添加评论

**请求URI：**

- `/comments`

**请求方式：**

- POST

**参数：**

| 参数名 | 必选 | 类型   | 说明       |
| ------ | ---- | ------ | ---------- |
| lid    | 是   | int    | 课时ID     |
| openid | 是   | string | openid     |
| info   | 是   | string | 评论岗位容 |

**返回示例**

```json
{
    "openid": "1111",
    "lid": "1",
    "info": "我就工",
    "updated_at": "2018-12-28 17:22:02",
    "created_at": "2018-12-28 17:22:02",
    "id": 2
}
```