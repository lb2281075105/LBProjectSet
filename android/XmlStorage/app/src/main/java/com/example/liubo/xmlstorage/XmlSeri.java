package com.example.liubo.xmlstorage;

import android.content.Context;
import android.util.*;

import org.xmlpull.v1.XmlSerializer;

import java.io.FileOutputStream;


/**
 * Created by liubo on 2017/9/3.
 */

public class XmlSeri {

    // Xml序列器生成xml文件
    public static void saveXmlByxmlFiles(Context context, String username, String pwd) throws Exception {

        XmlSerializer xmlSerializer = android.util.Xml.newSerializer();
        FileOutputStream fileOutputStream = context.openFileOutput("info.xml", Context.MODE_PRIVATE);
        xmlSerializer.setOutput(fileOutputStream,"utf-8");
        // 文档编码格式
        xmlSerializer.startDocument("utf-8", true);
        // 开始标签
        xmlSerializer.startTag(null, "map");
        xmlSerializer.startTag(null, "username");
        // 标签文字
        xmlSerializer.text(username);
        xmlSerializer.endTag(null, "username");
        // 开始标签
        xmlSerializer.startTag(null, "pwd");
        xmlSerializer.text(pwd);
        xmlSerializer.endTag(null, "pwd");

        xmlSerializer.endTag(null, "map");
        // 结束编码格式
        xmlSerializer.endDocument();

    }
}
