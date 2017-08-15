//
//  LBABKHeader.h
//  LBAiBoKe
//
//  Created by yunmei on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

///宏定义

///判断是不是开发、调试状态，如果是开发、调试状态，就让LBABKLog替换NSLog
#ifdef DEBUG
///LBABKLog是不限制参数的，中间用三个英文句号表示
#define LBABKLog(...) NSLog(__VA_ARGS__)
///如果是发布状态LBABKLog就直接为空
#elif
#define LBABKLog(...)
#endif
