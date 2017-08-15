//
//  LBABKNetService.m
//  LBAiBoKe
//
//  Created by liubo on 2017/8/16.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKNetService.h"
#import "LBABKSingle.h"

@implementation LBABKNetService
// http://localhost/sapi/public/?service=App.We7_Article.GetArticle&id=1
+ (void)getArticleWithId:(NSString *)idSting WithBlock:(void(^)(NSDictionary *result, NSError *error))block{

    NSString *url = [NSString stringWithFormat:@"http://127.0.0.1/sapi/public/?service=App.We7_Article.GetArticle&id=%@",idSting];
    [[LBABKSingle shareInstance]postWithUrl:url parameters:@{} withBlock:block];
}
@end
