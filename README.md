# resize-images
request:

```html
<form method = "post" enctype = "multipart/form-data" action = "worker.php">
    <input type = "file" multiple = "multiple" name = "userfile[]" />
    <input type = "submit" name = "save" value = "submit">
</form>
```

answer (in JSON):
```json
"images": 
"[{\"1080p\":\"files\\/15\\/KBvVRYj30j4.jpg\",\"240p\":\"files\\/15\\/KBvVRYj30j4320.jpg\"},                                                                                                                    {\"1080p\":\"files\\/15\\/Lee9E8dHEtI.jpg\",\"240p\":\"files\\/15\\/Lee9E8dHEtI320.jpg\"},
{\"1080p\":\"files\\/15\\/nfwuONTll-4.jpg\",\"240p\":\"files\\/15\\/nfwuONTll-4320.jpg\"},{\"1080p\":\"files\\/15\\/NhyViTutews.jpg\",\"240p\":\"files\\/15\\/NhyViTutews320.jpg\"},{\"1080p\":\"files\\/15\\/o8Fwc2xK9X8.jpg\",\"240p\":\"files\\/15\\/o8Fwc2xK9X8320.jpg\"},{\"1080p\":\"files\\/15\\/oel5pXwVLR8.jpg\",\"240p\":\"files\\/15\\/oel5pXwVLR8320.jpg\"},{\"1080p\":\"files\\/15\\/OPWl_j8TqaQ.jpg\",\"240p\":\"files\\/15\\/OPWl_j8TqaQ320.jpg\"},{\"1080p\":\"files\\/15\\/oU09l0cXFp4.jpg\",\"240p\":\"files\\/15\\/oU09l0cXFp4320.jpg\"},{\"1080p\":\"files\\/15\\/pDtNdZKP62w.jpg\",\"240p\":\"files\\/15\\/pDtNdZKP62w320.jpg\"},{\"1080p\":\"files\\/15\\/rm7G05ywXbc.jpg\",\"240p\":\"files\\/15\\/rm7G05ywXbc320.jpg\"},{\"1080p\":\"files\\/15\\/SOteXiMLHFA.jpg\",\"240p\":\"files\\/15\\/SOteXiMLHFA320.jpg\"},
{\"1080p\":\"files\\/15\\/u-LQ-i3rutk.jpg\",\"240p\":\"files\\/15\\/u-LQ-i3rutk320.jpg\"},{\"1080p\":\"files\\/15\\/VSzxE17rrmY.jpg\",\"240p\":\"files\\/15\\/VSzxE17rrmY320.jpg\"},
{\"1080p\":\"files\\/15\\/wol-I5nPlSA.jpg\",\"240p\":\"files\\/15\\/wol-I5nPlSA320.jpg\"},{\"1080p\":\"files\\/15\\/XFHwL6YStTA.jpg\",\"240p\":\"files\\/15\\/XFHwL6YStTA320.jpg\"}]"
```

answer (in ARRAY):
```array
Array
(
    [0] => Array
        (
            [1080p] => files/15/KBvVRYj30j4.jpg
            [240p] => files/15/KBvVRYj30j4320.jpg
        )

    [1] => Array
        (
            [1080p] => files/15/Lee9E8dHEtI.jpg
            [240p] => files/15/Lee9E8dHEtI320.jpg
        )

    [2] => Array
        (
            [1080p] => files/15/nfwuONTll-4.jpg
            [240p] => files/15/nfwuONTll-4320.jpg
        )

    [3] => Array
        (
            [1080p] => files/15/NhyViTutews.jpg
            [240p] => files/15/NhyViTutews320.jpg
        )

    [4] => Array
        (
            [1080p] => files/15/o8Fwc2xK9X8.jpg
            [240p] => files/15/o8Fwc2xK9X8320.jpg
        )

    [5] => Array
        (
            [1080p] => files/15/oel5pXwVLR8.jpg
            [240p] => files/15/oel5pXwVLR8320.jpg
        )

    [6] => Array
        (
            [1080p] => files/15/OPWl_j8TqaQ.jpg
            [240p] => files/15/OPWl_j8TqaQ320.jpg
        )

    [7] => Array
        (
            [1080p] => files/15/oU09l0cXFp4.jpg
            [240p] => files/15/oU09l0cXFp4320.jpg
        )

    [8] => Array
        (
            [1080p] => files/15/pDtNdZKP62w.jpg
            [240p] => files/15/pDtNdZKP62w320.jpg
        )

    [9] => Array
        (
            [1080p] => files/15/rm7G05ywXbc.jpg
            [240p] => files/15/rm7G05ywXbc320.jpg
        )

    [10] => Array
        (
            [1080p] => files/15/SOteXiMLHFA.jpg
            [240p] => files/15/SOteXiMLHFA320.jpg
        )

    [11] => Array
        (
            [1080p] => files/15/u-LQ-i3rutk.jpg
            [240p] => files/15/u-LQ-i3rutk320.jpg
        )

    [12] => Array
        (
            [1080p] => files/15/VSzxE17rrmY.jpg
            [240p] => files/15/VSzxE17rrmY320.jpg
        )

    [13] => Array
        (
            [1080p] => files/15/wol-I5nPlSA.jpg
            [240p] => files/15/wol-I5nPlSA320.jpg
        )

    [14] => Array
        (
            [1080p] => files/15/XFHwL6YStTA.jpg
            [240p] => files/15/XFHwL6YStTA320.jpg
        )

)
```
