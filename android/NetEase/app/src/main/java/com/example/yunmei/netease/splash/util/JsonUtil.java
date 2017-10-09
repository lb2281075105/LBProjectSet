package com.example.yunmei.netease.splash.util;

import android.text.TextUtils;

import com.google.gson.Gson;

/**
 * Created by yunmei on 2017/10/9.
 */


public class JsonUtil {
    static Gson mGson;
    // <T>代表声明使用泛型
    // 第二个 T 返回的类型是我们使用的类型
    // Class<T> 类型.class
    public static <T> T parseJson(String json ,Class<T> tClass){
        if(mGson == null){
            mGson = new Gson();
        }

        if(TextUtils.isEmpty(json)){
            return null ;
        }

        return mGson.fromJson(json,tClass);

    }
}
