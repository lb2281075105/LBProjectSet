package com.example.liubo.lbnewsclient.GetData;

import java.io.InputStream;
import java.net.HttpURLConnection;
import java.net.URI;
import java.net.URL;

/**
 * Created by liubo on 2017/9/4.
 */

public class NetWorkUtil {
    public static InputStream getResource(String urlString) throws Exception {

        // 状态码等于200；返回输入流
        URL url = new URL(urlString);
        HttpURLConnection httpURLConnection = (HttpURLConnection) url.openConnection();
        if (httpURLConnection.getResponseCode() == 200) {
            return httpURLConnection.getInputStream();
        }
        return null;
    }
}
