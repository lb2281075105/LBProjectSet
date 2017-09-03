package com.example.liubo.xmlstorage;

import android.content.Context;
import android.util.*;

import org.xmlpull.v1.XmlPullParser;

import java.io.FileInputStream;

/**
 * Created by liubo on 2017/9/3.
 */

public class XmlParse {
    public static String xmlParseFile(Context context) throws Exception {
        String result = "";
        // 创建一个pull解析器
        XmlPullParser xmlPullParser = android.util.Xml.newPullParser();
        // 不管是outputstream还是inputstream都在files里面读文件
        FileInputStream fileInputStream = context.openFileInput("info.xml");
        xmlPullParser.setInput(fileInputStream, "utf-8");
        // 解析文件
        int eventType = xmlPullParser.getEventType();

//        eventType = xmlPullParser.next();
//        Log.v("解析文件",eventType+"");
//        Log.v("标签名称",xmlPullParser.getName());
//        eventType = xmlPullParser.next();
//        Log.v("解析文件",eventType+"");
//        Log.v("标签名称",xmlPullParser.getName());


        while (eventType != xmlPullParser.END_DOCUMENT) {
            if (eventType == xmlPullParser.START_TAG) {
                if (xmlPullParser.getName().equals("username")) {
                    result += ("   username=" + xmlPullParser.nextText());
                } else if (xmlPullParser.getName().equals("pwd")) {
                    result += ("   pwd=" + xmlPullParser.nextText());
                }
            }
            eventType = xmlPullParser.next();
        }

        return result;
    }
}
