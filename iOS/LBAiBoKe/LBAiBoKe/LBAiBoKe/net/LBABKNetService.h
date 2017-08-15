//
//  LBABKNetService.h
//  LBAiBoKe
//
//  Created by liubo on 2017/8/16.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface LBABKNetService : NSObject
// 获取文章
+ (void)getArticleWithId:(NSString *)idSting WithBlock:(void(^)(NSDictionary *result, NSError *error))block;
@end
